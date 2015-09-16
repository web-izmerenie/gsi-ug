###
* Scripts from forms
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

#require libs
$ = require('jquery')

module.exports.init = ->
	$overlay = $('.overlay')
	$formBody = $('#form')
	$callForm = $('a[href="#form"]')
	$form = $formBody.find 'form'
	$submit = $form.find 'a[href="#submit"]'
	$errorMessage = $form.find '.error'
	$sucsess = $formBody.find '.sucsess'

	$overlay.click ->
		$formBody.fadeOut()
		$(this).fadeOut("",
			->
				$form.show()
				$errorMessage.css
					opacity: 0
				$sucsess.hide()
				$form.trigger 'reset'
				)

	$callForm.click ->
		$overlay.fadeIn()
		$formBody.fadeIn()

	$submit.click (e) ->
		error = false

		e.preventDefault()
		$form.find 'input[type="text"], textarea'
			.each ->
				if $(this).val().replace(/\s/g, '') == ''
				  $(this).val('')

				if $(this).val() == ''
					error = true

			if error
				$errorMessage.css
					opacity: 1
			else
				$errorMessage.css
					opacity: 0
				$form.hide()
				$form.trigger 'reset'
				$sucsess.show()
