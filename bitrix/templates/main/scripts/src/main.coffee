###
* Main scripts file
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

#include libs
$ = require('jquery')

#include sections
header = require './sections/header.coffee'
application = require './sections/application.coffee'
form = require './sections/form.coffee'
seo = require './sections/seo_text.coffee'

$ ->
	header.init()
	application.init()
	form.init()
	seo.init()
