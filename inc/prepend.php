<?php
// currently not supported
if(php_sapi_name() == 'cli')
{
	return;
}

tideways_enable(TIDEWAYS_FLAGS_CPU | TIDEWAYS_FLAGS_MEMORY | TIDEWAYS_FLAGS_NO_SPANS);


#define TIDEWAYS_FLAGS_NO_BUILTINS   0x0001 /* do not profile builtins */
#define TIDEWAYS_FLAGS_CPU           0x0002 /* gather CPU times for funcs */
#define TIDEWAYS_FLAGS_MEMORY        0x0004 /* gather memory usage for funcs */
#define TIDEWAYS_FLAGS_NO_USERLAND   0x0008 /* do not profile userland functions */
#define TIDEWAYS_FLAGS_NO_COMPILE    0x0010 /* do not profile require/include/eval */
#define TIDEWAYS_FLAGS_NO_SPANS      0x0020

//xhprof_enable(XHPROF_FLAGS_MEMORY | XHPROF_FLAGS_CPU);