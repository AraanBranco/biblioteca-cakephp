<?php
/**
 * Thumbnail helper
 *
 * Fast way to embed UploadPlugin's thumb in your views
 *
 * @package    upload
 * @subpackage upload.views.helpers
 */
class ThumbnailHelper extends AppHelper {


/**
 * List of helpers used by this helper
 *
 * @var array
 */
  var $helpers = array('Html');

/**
 * Helper default options
 *
 * @var array
 */
  var $_defaultOptions = array(
    'warnings' => true
  );

/**
 * Helper constructor
 *
 * @param array ThumbnailHelper options.
 */
  function __construct($options = array()) {
    parent::__construct($options);
    $this->settings = array_merge($this->_defaultOptions, $options);
  }

/**
 * Return url of (With HtmlHelper::image) $data thumbnail
 *
 * @param string $field  field name where get the thumb name (in format: Model.name)
 * @param mixed  $size   thumbnail size alias (thumb, small, etc..)
 * @param array  $data   model data
 * @example
 *         $data = array('User'=> array('id' => 1, 'name' => 'Mirko', [...]));
 *         echo $this->Thumbnail->url('User.avatar', 'small', $data);
 * @return string
 */
  function url($field, $size, $data) {
    return $this->output($this->constructPath($field, $size, $data));
  }

/**
 * Print image tag (With HtmlHelper::image) with $data thumbnail
 *
 * @param string $field  field name where get the thumb name (in format: Model.name)
 * @param mixed  $size   thumbnail size alias (thumb, small, etc..)
 * @param array  $data   model data
 * @param array $options Array of HTML attributes.
 * @example
 *         $data = array('User'=> array('id' => 1, 'name' => 'Mirko', [...]));
 *         echo $this->Thumbnail->image('User.avatar', 'small', $data, array('title' => 'User avatar'))
 * @return string
 */
  function image($field, $size, $data, $htmlAttributes = array()) {
    return $this->output($this->Html->image(
      $this->constructPath($field, $size, $data),
      (array) $htmlAttributes
    ));
  }

/**
 * Constructs an image path
 *
 * @param string $field  field name where get the thumb name (in format: Model.name)
 * @param mixed  $size   thumbnail size alias (thumb, small, etc..)
 * @param array  $data   model data
 * @return string
 */
  function constructPath($field, $size, $data) {
    list($modelName, $fieldName) = explode('.', $field);
    $name = Set::extract($field, $data);
    $basePath = $this->_getPath($modelName, $fieldName, $data);
    if ($basePath === null || $thumbName === null) {
      return $this->__error(sprintf(
        __d('upload', "%s primary key, %s or %s.%s_dir does not exist in \$data"),
        $modelName, $fieldName, $modelName, $fieldName
      ));
    }
    return "{$basePath}/{$size}_{$thumbName}";
  }

/**
 * Get Upload's plugin path from Model
 *
 * Make sure that your model schema has a $field_dir where UploadPlugin store methodPath directory
 * (flat, primaryKey, random).
 *
 * @param  string  Field name where get the thumb name (in format: Model.name)
 * @param  array   Model row
 * @return mixed   String path or null on fail
 */
  function _getPath($modelName, $fieldName, $data) {
    $Model = ClassRegistry::init($model, 'Model');
    if (!$Model) {
      return $this->__error(sprintf(
        __d('upload', 'Model %s not exists', true), $modelName
      ));
    }

    if (!$Model->hasField($field)) {
      return $this->__error(sprintf(
        __d('upload', '%s not have a field called %s', true), $modelName, $fieldName
      ));
    }
    if (!$Model->Behaviors->attached('Upload')) {
      $this->__error(sprintf(
        __d('upload', '%s not have the Upload behavior attached', true), $modelName
      ));
      return null;
    }

    $settings = $Model->Behaviors->Upload->settings[$model][$field];
    $uploadDir = $Model->Behaviors->Upload->_path($Model, $field, $settings['path']);
    $uploadField = $uploadSettings['fields']['dir'];
    $uploadPath = null;

    $errmsg = __('upload', 'Path to thumbnail could not be extracted from data');
    if (Set::check($data, "{$model}.{$uploadField}")) {
      $uploadPath = $data[$model][$uploadField];
    } else {
      if ($settings['pathMethod'] != '_getPathPrimaryKey') {
        return $this->_error($errmsg);
      }

      if (!Set::check($data, "{$model}.{$Model->primaryKey}")) {
        return $this->_error($errmsg);
      }

      $uploadPath = $data[$model][$Model->primaryKey];
    }

    return str_replace(
      array('webroot', '\\'),
      array('', '/'),
      "{$uploadDir}{$uploadPath}"
    );
  }

/**
 * Triggers errors
 *
 * @param string $errmsg A message to output
 * @return void
 */
  function _error($errmsg = '') {
    if ($this->settings['warnings']) {
      trigger_error($errmsg);
    }
    return null;
  }

}