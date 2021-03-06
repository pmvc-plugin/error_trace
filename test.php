<?php
PMVC\Load::plug();
PMVC\setPlugInFolders(['../']);
class ErrorTraceTest extends PHPUnit_Framework_TestCase
{
    function testPlugin()
    {
        ob_start();
        $plug = 'error_trace';
        print_r(PMVC\plug($plug));
        $output = ob_get_contents();
        ob_end_clean();
        $this->assertContains($plug,$output);
    }
}
