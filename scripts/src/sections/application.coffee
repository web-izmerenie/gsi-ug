###
* Scripts from section applications
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

#require libs
$ = require('jquery')

module.exports.init = ->
	$main = $('#application')
	$hover = $main.find '.hover'

	$hover.each ->
		$parent = $(this).closest 'li'
		$hide = $parent.find '.hide'

		$(this).hover ->
			$hide.removeClass 'zoomOut'
				.addClass 'zoomIn'
		, ->
			$hide.removeClass 'zoomIn'
				.addClass 'zoomOut'
		return
