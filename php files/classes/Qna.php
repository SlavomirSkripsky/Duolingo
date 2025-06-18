<?php

class Qna
{
    private $qnaItems = [
        ['question' => 'Kde začať?', 'answer' => 'Naša stránka Duolingo sa snaží pomáhať vám a dosiahnúť čo najlepšie zručnosti v jazyku, ktorý sa chcete naučit. 
        Začíname od základov a krok za krokom sa posunieme k zložitejším témam. 
        Všetko si vysvetlíme jednoducho a zrozumiteľne, aby učenie bolo zábavné a efektívne. 
        Stačí spraviť prvý krok a my vás budeme sprevádzať na celej ceste za novými vedomosťami.'],
        ['question' => 'Ako spolupracujeme?', 'answer' => 'Spolupracujeme jednoducho a efektívne. 
        Vy si vyberiete jazyk, ktorý sa chcete naučiť, a my vám ponúkneme lekcie, cvičenia a podporu. 
        Počas celého učenia máte možnosť komunikovať s lektormi, klásť otázky a zdieľať pokrok. 
        Našim cieľom je, aby ste sa cítili motivovaní, podporovaní a aby učenie prebiehalo v priateľskej atmosfére. 
        Sme tu pre vás — krok za krokom, spoločne.'],
        ['question' => 'Prečo je DUOLINGO najlepšia možnosť?', 'answer' => 'Duolingo je najlepšia voľba pre každého, kto sa chce učiť jazyk rýchlo a jednoduchou formou. 
        Duolingo ponúka široký výber jazykov, motivačný systém odmien a prispôsobuje sa vašej úrovni.'],  // <--- oprava: čiarka tu
        ['question' => 'Máme najlepšiu podporu?', 'answer' => 'Áno, naša podpora je tu pre vás vždy, keď ju potrebujete. 
        Ak máte otázky, nejasnosti alebo potrebujete pomoc pri učení, náš tím vám ochotne poradí. 
        Sme pripravení odpovedať na vaše správy, usmerniť vás a motivovať, aby ste dosiahli svoje jazykové ciele. 
        U nás sa nikdy necítite sami — spolu to zvládneme.'],
    ];

    
    public function index()
    {
        return $this->qnaItems;
    }
}
?>