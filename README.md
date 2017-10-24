# xhprof.io

GUI to analyze the profiling data collected using XHProf – A Hierarchical Profiler for PHP.

This project is no longer being maintained. If you'd like to take over active maintenance of this project, please contact the project author (gajus@gajus.com).

# PHP7 - xhprof replacement to tideways 


    inc/prepend.php
    
    
    tideways_enable(TIDEWAYS_FLAGS_CPU | TIDEWAYS_FLAGS_MEMORY | TIDEWAYS_FLAGS_NO_SPANS);


    #define TIDEWAYS_FLAGS_NO_BUILTINS   0x0001 /* do not profile builtins */
    #define TIDEWAYS_FLAGS_CPU           0x0002 /* gather CPU times for funcs */
    #define TIDEWAYS_FLAGS_MEMORY        0x0004 /* gather memory usage for funcs */
    #define TIDEWAYS_FLAGS_NO_USERLAND   0x0008 /* do not profile userland functions */
    #define TIDEWAYS_FLAGS_NO_COMPILE    0x0010 /* do not profile require/include/eval */
    #define TIDEWAYS_FLAGS_NO_SPANS      0x0020

