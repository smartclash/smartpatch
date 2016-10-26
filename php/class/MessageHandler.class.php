<?php

/*
 * A SIMPLE LOGGER MADE BY SMART HACKS INC FOR
 * IT'S USE IN IT'S OWN PUBLIC PROJECTS. THIS
 * LOGGER IS A NOOB MADE AND NOT PROFESSIONAL
 * BUT STILL DOES THE WORK AND FASTER THAN ANY
 * OTHER LOGGER MADE IN THE WHOLE WORLD.
 *
 * @usage :
 *
 * Instead of using echo "Foo Bar";
 * to echo things, simply use the code used in
 * this class like this
 *
 * $Logger = new Logger();
 * $Logger->logThis("This is a text", "ERROR", 3, TRUE);
 *
 * Now, it will be logged inside a file called by
 * the date, month and year, so every day, a new
 * log file will be created to stop overloading a
 * single file.
 *
 * DOCUMENTATION WILL BE PROVIDED AFTER THIS LOGGER GET'S
 * MORE FEATURES. YOU CAN EXPECT THIS LOGGER TO HAVE MORE
 * FEATURES (SAVING DATABASE QUERIES ETC.) AND YOU CAN
 * EXPECT IT TO BE READY BY 2 DAYS FROM THE DAY OF LAUNCH.
 *
 * @author xXAlphaManXx
 */
class Logger
{
    public $lvl;

    public function logThis($text = null, $type = null, $lvl = null, $echo = FALSE)
    {
        $this->level($lvl);

        if(isset($lvl)){
            if(isset($text) && isset($type)){
                if($lvl == 0){
                    // Do nothing, we should not log anything.
                } elseif($lvl == 1) {
                    if($type === 'ERROR'){
                        $this->logger($text,$type,$echo);
                    }
                } elseif($lvl == 2) {
                    if($type === 'ERROR' || $type === 'WARNING'){
                        $this->logger($text,$type,$echo);
                    }
                } elseif($lvl == 3){
                    $this->logger($text,$type,$echo);
                } else {
                    // Do nothing, default is to set logging to lvl zero (0)
                }
            } else {
                $this->noInput();
            }
        }
    }

    public function level($lvl)
    {
        switch($lvl):
            case 0:
                $this->lvl = 0;
                break;
            case 1:
                $this->lvl = 1;
                break;
            case 2:
                $this->lvl = 2;
                break;
            case 3:
                $this->lvl = 3;
                break;
        endswitch;
    }

    public function logger($text, $type, $echo)
    {
        if($echo === TRUE){
            $write = fopen("Logs." . date('D d M Y') . ".log", "w");
            $text = "[" . $type . "] -> " . $text . "\n";
            fwrite($write,$text);
            echo "[" . $type . "] -> " . $text . "\n";
        } else {
            $write = fopen("Logs." . date('D d M Y') . ".log", "w");
            $text = "[" . $type . "] -> " . $text . "\n";
            fwrite($write, $text);
        }
    }

    public function noInput()
    {
        $write = fopen("Logs." . date('D d M Y') . " .log","w");
        $text = "Oops, there is something problem with the way you used this logger";
        fwrite($write,$text);
    }
}