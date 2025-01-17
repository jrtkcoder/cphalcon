
#ifdef HAVE_CONFIG_H
#include "../../../../ext_config.h"
#endif

#include <php.h>
#include "../../../../php_ext.h"
#include "../../../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"
#include "kernel/object.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been influenced by Zend Diactoros
 * @link    https://github.com/zendframework/zend-diactoros
 * @license https://github.com/zendframework/zend-diactoros/blob/master/LICENSE.md
 */
/**
 * Describes a data stream from "php://temp"
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */
ZEPHIR_INIT_CLASS(Phalcon_Http_Message_Stream_Temp) {

	ZEPHIR_REGISTER_CLASS_EX(Phalcon\\Http\\Message\\Stream, Temp, phalcon, http_message_stream_temp, phalcon_http_message_stream_ce, phalcon_http_message_stream_temp_method_entry, 0);

	return SUCCESS;

}

/**
 * Constructor
 */
PHP_METHOD(Phalcon_Http_Message_Stream_Temp, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_0 = NULL;
	zval *mode = NULL, mode_sub, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&mode_sub);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &mode);

	if (!mode) {
		mode = &mode_sub;
		ZEPHIR_INIT_VAR(mode);
		ZVAL_STRING(mode, "rb");
	}


	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "php://temp");
	ZEPHIR_CALL_PARENT(NULL, phalcon_http_message_stream_temp_ce, getThis(), "__construct", &_0, 0, &_1, mode);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

