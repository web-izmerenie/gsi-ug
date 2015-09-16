###
* Scripts from header
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

#require libs
$ = require('jquery')

module.exports.init = ->
	$header = $('header')
	$menuItem = $header.find '#menu li a'

	window.onscroll = ->
		$scrolLeft = $('html').scrollLeft()

		$scrolLeft = -$scrolLeft
		$header.css
			'margin-left': $scrolLeft

	$menuItem.click (e) ->
		e.preventDefault()
		$href = $(this).attr 'href'
		$href = $($href)
		$target = $href.offset().top - 60

		$('html, body').animate
			scrollTop: $target
			1000
