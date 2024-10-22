<?php
class programer
{
    public string $nama;

    public function __construct(string $nama)
    {
        $this->nama= $nama;
    }
}

class backendprogramer extends programer
{

}
class frontendProgramer extends programer
{

}
class company 
{
    public programer $programer;
}

function sayHelloprogramer(programer $programer){
    echo "hallo programer $programer->nama". PHP_EOL; 
    if ($programer instanceof backendprogramer) {
        echo "hallo Backend Programer $programer->nama". PHP_EOL;
    }elseif ($programer instanceof frontendProgramer) {
        echo "hallo Front End Programer $programer->nama". PHP_EOL;
    }elseif ($programer instanceof programer){
        echo "hallo Programer $programer->nama". PHP_EOL;
    }
}
?>