
#ifdef HAVE_CONFIG_H
#include "../../../ext_config.h"
#endif

#include <php.h>
#include "../../../php_ext.h"
#include "../../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
/**
 * Libmemcached adapter
 */
ZEPHIR_INIT_CLASS(Phalcon_Cache_Adapter_Libmemcached) {

	ZEPHIR_REGISTER_CLASS_EX(Phalcon\\Cache\\Adapter, Libmemcached, phalcon, cache_adapter_libmemcached, phalcon_storage_adapter_libmemcached_ce, NULL, 0);

	zend_class_implements(phalcon_cache_adapter_libmemcached_ce TSRMLS_CC, 1, phalcon_cache_adapter_adapterinterface_ce);
	return SUCCESS;

}

