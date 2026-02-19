<?php

class Verify
{
    private array $publicPages = [
        'home',
        'sobre',
        'contato',
        'collection',
        'suporte',
        'carrinho',
        'exclusive',
        'messages/emaildone',
        'messages/emailcap',
        'messages/smsdone',
        'messages/smscap'
    ];

    /**
     * Verifica se a página existe e retorna o arquivo correto
     */
    public function resolvePublicPage(string $page): string
    {
        // normaliza
        $page = strtolower(trim($page));

        // segurança: só letras
        if (!preg_match('/^[a-z\/]+$/', $page)) {
        return $this->pageNotFound();
        }


        // verifica se é página pública
        if (!in_array($page, $this->publicPages)) {
            return $this->pageNotFound();
        }

        $file = "$page.php";

        // verifica se o arquivo existe
        if (!file_exists($file)) {
            return $this->pageNotFound();
        }

       
        return $file;
    }

     //Página padrão para erro
    private function pageNotFound(): string
    {
        return "404.php";
    }
}

?>