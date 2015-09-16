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

	window.onscroll = ->
		$scrolLeft = $('html').scrollLeft()

		$scrolLeft = -$scrolLeft
		$header.css
			'margin-left': $scrolLeft
