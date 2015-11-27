###
* Scripts from section seo-text
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

#require libs
$ = require('jquery')

module.exports.init = ->

	$('.seo').click(->
		if($(@).hasClass 'active')
			$(@).animate
				'height': '150px'
				500
			.removeClass 'active'

		else
			$(@).animate
				'height': '100%'
				500
			.addClass 'active'
	)
