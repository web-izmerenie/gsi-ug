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
header = require('./sections/header.coffee')
application = require('./sections/application.coffee')

$ ->
	header.init()
	application.init()
