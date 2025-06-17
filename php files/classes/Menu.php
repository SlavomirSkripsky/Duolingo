<?php

class Menu
{
    private $menuItems;

    public function __construct($menuItems = [])
    {
        if (empty($menuItems)) {
            $menuItems = [
                ['label' => 'Domov', 'link' => 'index.php'],
                ['label' => 'O nás', 'link' => 'onas.php'],
                ['label' => 'Kurzy', 'link' => 'kurzy.php'],
                ['label' => 'Podpora', 'link' => 'podpora.php']
                ['label' => 'Eventy', 'link' => 'eventy.php']
                ['label' => 'Kontakt', 'link' => 'kontakt.php']
                ['label' => 'Q&A', 'link' => 'qna.php']
                
            ];
        }
        
        $this->menuItems = $menuItems;
    }

    public function index()
    {
        return $this->menuItems;
    }
}
?>