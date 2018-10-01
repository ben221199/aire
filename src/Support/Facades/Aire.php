<?php

namespace Galahad\Aire\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
@method static self setTheme($namespace = NULL, $prefix = NULL)
@method static Galahad\Aire\Elements\Form form($action = NULL, $bound_data = NULL)
@method static Galahad\Aire\Elements\Form open($action = NULL, $bound_data = NULL)
@method static mixed config(string $key, $default = NULL)
@method static string render($view, array $data = [], array $merge_data = [])
@method static self bind($bound_data)
@method static mixed getDefaultValue($name, $fallback = NULL)
@method static self open()
@method static self close()
@method static self route(string $route, array $parameters = [], bool $absolute = true)
@method static self get()
@method static self post()
@method static self put()
@method static self patch()
@method static self delete()
@method static Galahad\Aire\Elements\Element acceptCharset($value = NULL)
@method static Galahad\Aire\Elements\Element action($value = NULL)
@method static Galahad\Aire\Elements\Element autoComplete($value = NULL)
@method static Galahad\Aire\Elements\Element encType($value = NULL)
@method static Galahad\Aire\Elements\Element method($value = NULL)
@method static Galahad\Aire\Elements\Element name($value = NULL)
@method static Galahad\Aire\Elements\Element noValidate(bool $no_validate = true)
@method static Galahad\Aire\Elements\Element target($value = NULL)
@method static mixed data($key, $value)
@method static mixed toHtml()
@method static Galahad\Aire\Elements\Element accessKey($value = NULL)
@method static Galahad\Aire\Elements\Element class($value = NULL)
@method static Galahad\Aire\Elements\Element contentEditable(bool $content_editable = true)
@method static Galahad\Aire\Elements\Element contextMenu($value = NULL)
@method static Galahad\Aire\Elements\Element dir($value = NULL)
@method static Galahad\Aire\Elements\Element draggable($value = NULL)
@method static Galahad\Aire\Elements\Element dropZone($value = NULL)
@method static Galahad\Aire\Elements\Element hidden(bool $hidden = true)
@method static Galahad\Aire\Elements\Element id($value = NULL)
@method static Galahad\Aire\Elements\Element lang($value = NULL)
@method static Galahad\Aire\Elements\Element role($value = NULL)
@method static Galahad\Aire\Elements\Element spellCheck(bool $spell_check = true)
@method static Galahad\Aire\Elements\Element style($value = NULL)
@method static Galahad\Aire\Elements\Element tabIndex($value = NULL)
@method static Galahad\Aire\Elements\Element title($value = NULL)
@method static Galahad\Aire\Elements\Element ariaActiveDescendant($value = NULL)
@method static Galahad\Aire\Elements\Element ariaAtomic(bool $aria_atomic = true)
@method static Galahad\Aire\Elements\Element ariaBusy(bool $aria_busy = true)
@method static Galahad\Aire\Elements\Element ariaControls($value = NULL)
@method static Galahad\Aire\Elements\Element ariaDescribedBy($value = NULL)
@method static Galahad\Aire\Elements\Element ariaDisabled($value = NULL)
@method static Galahad\Aire\Elements\Element ariaDropEffect($value = NULL)
@method static Galahad\Aire\Elements\Element ariaFlowTo($value = NULL)
@method static Galahad\Aire\Elements\Element ariaGrabbed($value = NULL)
@method static Galahad\Aire\Elements\Element ariaHasPopup(bool $aria_has_popup = true)
@method static Galahad\Aire\Elements\Element ariaHidden(bool $aria_hidden = true)
@method static Galahad\Aire\Elements\Element ariaInvalid($value = NULL)
@method static Galahad\Aire\Elements\Element ariaLabel($value = NULL)
@method static Galahad\Aire\Elements\Element ariaLabelledBy($value = NULL)
@method static Galahad\Aire\Elements\Element ariaLive($value = NULL)
@method static Galahad\Aire\Elements\Element ariaOwns($value = NULL)
@method static Galahad\Aire\Elements\Element ariaRelevant($value = NULL)
@method static Galahad\Aire\Elements\Label label(string $label)
@method static Galahad\Aire\Elements\Button button(string $label)
@method static Galahad\Aire\Elements\Input input($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input checkbox($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input color($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input date($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input dateTime($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input dateTimeLocal($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input email($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input file($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input image($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input month($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input number($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input password($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input radio($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input range($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input search($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input tel($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input time($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input url($name = NULL, $label = NULL)
@method static Galahad\Aire\Elements\Input week($name = NULL, $label = NULL)
 */
class Aire extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'galahad.aire';
	}
}
