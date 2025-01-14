
extern zend_class_entry *phalcon_url_ce;

ZEPHIR_INIT_CLASS(Phalcon_Url);

PHP_METHOD(Phalcon_Url, get);
PHP_METHOD(Phalcon_Url, getBasePath);
PHP_METHOD(Phalcon_Url, getBaseUri);
PHP_METHOD(Phalcon_Url, getDI);
PHP_METHOD(Phalcon_Url, getStatic);
PHP_METHOD(Phalcon_Url, getStaticBaseUri);
PHP_METHOD(Phalcon_Url, setBasePath);
PHP_METHOD(Phalcon_Url, setBaseUri);
PHP_METHOD(Phalcon_Url, setDI);
PHP_METHOD(Phalcon_Url, setStaticBaseUri);
PHP_METHOD(Phalcon_Url, path);

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_get, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_get, 0, 0, IS_STRING, NULL, 0)
#endif
	ZEND_ARG_INFO(0, uri)
	ZEND_ARG_INFO(0, args)
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, local, _IS_BOOL, 1)
#else
	ZEND_ARG_INFO(0, local)
#endif
	ZEND_ARG_INFO(0, baseUri)
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getbasepath, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getbasepath, 0, 0, IS_STRING, NULL, 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getbaseuri, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getbaseuri, 0, 0, IS_STRING, NULL, 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_url_getdi, 0, 0, Phalcon\\Di\\DiInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getdi, 0, 0, IS_OBJECT, "Phalcon\\Di\\DiInterface", 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getstatic, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getstatic, 0, 0, IS_STRING, NULL, 0)
#endif
	ZEND_ARG_INFO(0, uri)
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getstaticbaseuri, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_getstaticbaseuri, 0, 0, IS_STRING, NULL, 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_url_setbasepath, 0, 1, Phalcon\\Url\\UrlInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_setbasepath, 0, 1, IS_OBJECT, "Phalcon\\Url\\UrlInterface", 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, basePath, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, basePath)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_url_setbaseuri, 0, 1, Phalcon\\Url\\UrlInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_setbaseuri, 0, 1, IS_OBJECT, "Phalcon\\Url\\UrlInterface", 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, baseUri, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, baseUri)
#endif
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_phalcon_url_setdi, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, container, Phalcon\\Di\\DiInterface, 0)
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_url_setstaticbaseuri, 0, 1, Phalcon\\Url\\UrlInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_setstaticbaseuri, 0, 1, IS_OBJECT, "Phalcon\\Url\\UrlInterface", 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, staticBaseUri, IS_STRING, 0)
#else
	ZEND_ARG_INFO(0, staticBaseUri)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_path, 0, 0, IS_STRING, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_url_path, 0, 0, IS_STRING, NULL, 0)
#endif
#if PHP_VERSION_ID >= 70200
	ZEND_ARG_TYPE_INFO(0, path, IS_STRING, 1)
#else
	ZEND_ARG_INFO(0, path)
#endif
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_url_method_entry) {
	PHP_ME(Phalcon_Url, get, arginfo_phalcon_url_get, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, getBasePath, arginfo_phalcon_url_getbasepath, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, getBaseUri, arginfo_phalcon_url_getbaseuri, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, getDI, arginfo_phalcon_url_getdi, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, getStatic, arginfo_phalcon_url_getstatic, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, getStaticBaseUri, arginfo_phalcon_url_getstaticbaseuri, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, setBasePath, arginfo_phalcon_url_setbasepath, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, setBaseUri, arginfo_phalcon_url_setbaseuri, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, setDI, arginfo_phalcon_url_setdi, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, setStaticBaseUri, arginfo_phalcon_url_setstaticbaseuri, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Url, path, arginfo_phalcon_url_path, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
