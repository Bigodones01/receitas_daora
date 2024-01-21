# Programação Back-End -> Trabalho -> Receitas Daora

## Table of Contents

* [1. Como usar](#como-usar)
* [2. Versões](#versões)

-- --

## Como usar:

Programas recomendados: XAMPP e HeidiSQL.

1. Coloque todo o conteúdo da pasta para a pasta **htdocs**, aonde está instalado o XAMPP.
2. Usando o HeidiSQL, execute o script "receitas_daora.sql", que está dentro de ***extra_files***, para que assim tenha a *database* necessária para o funcionamento do site.
3. Veja se precisa mudar alguma coisa no arquivo "php/database/connection.php".
4. Só abrir o site no navegador. (localhost/receitas_daora)
5. Importante: dê uma olhada no arquivo users que está no extra_files. Ele será útil para login.

(Eu adicionei um guia em PDF, caso seja útil.)
-- --

## Versões:

### **✅ v1.0 FINAL (Fearless Falcon), 16/06/2023, 6:41pm**

* Desfeito o dashboard para superusers devido à complexidade.
* Atualizado o arquivo SQL necessário para rodar o site. Agora contém alguns dados como base para o site.
* Versão final.


### **🟦 BETA 1.5 (Cunning Cheetah), 16/06/2023, 4:49pm**

* Rápidas correções.


### **🟦 BETA 1 (Cunning Cheetah), 16/06/2023, 3:15pm**

* Criado scripts em PHP para inserir, excluir, atualizar e ler (CRUD).
* Melhorias nos formulários de Login, cadastrar e formulário de receitas.
* Ao todo, 5 scripts *query* foram criados.
* Arquivo SQL essencial para este site atualizado.
* Será realizado mais testes, brevemente será lançado a versão final.


### **:yellow_square: v0.2a, 14/06/2023, 10:26pm**

* Implementado sistema de criar conta, não sei o que vou fazer com ele, pode ser que eu coloque uma seção de comentários.
* Script em PHP para adcionar fotos, ainda não testada.
* Script em PHP que manipula o cadastro possui sem proteção de senha, será implementado uma segurança maior depois.
* Provável que a próxima versão vai vir com pelo menos uma listagem ou a dashboard para admin, eu espero, mas não garanto nada.


**:yellow_square: v0.1.5a, 14/06/2023, 5:00pm**

* Adição do botão "Dashboard", será implementado depois (não garantido).


**:yellow_square: v0.1.3a, 13/06/2023, 9:34pm**

* Pequenas melhorias na topbar.
* Pequena edição do arquivo que controla o login.
* Só isso que lembro.


**:yellow_square: v0.1.2a, 12/06/2023, 10:04pm**

* Remoção do Bootstrap, devido à alguns problemas de estilo.
* *main.css* virou uma classe para todos os divs das páginas.
* Foi adcionado uma barra no topo da página, terá mais coisas nela (ainda preciso descobrir como que vou meter um menu de login na barra).
* Intensas modificações no CSS.
* Nova coluna em cada uma das tabelas: vai adcionar um endereço de foto, será implementado nas páginas futuramente.
* Intensa modificação no script em JS.
* Talvez eu reorganize as pastas.


**:yellow_square: v0.1.1a, 10/06/2023, 5:47pm**

* Adição da pasta ***template*** (encontra-se dentro da pasta ***php***), onde serão guardados a base do HTML mais o Bootstrap, estilos CSS serão adcionados à parte.
* Uso do Bootstrap e uma pequena edição dele no ***main.css***.
* Animação de ondas na tela login, feito por **PK.C.Ashish Kumar**, levemente modificado por mim. A animação encontra-se no site da [Codepen.io](https://codepen.io/kcak11/pen/BYewdo).


**:yellow_square: v0.1a, 09/06/2023, 4:38pm**

* Tela de login finalmente funciona, depois de dois dias tentando ver o que diabos estava acontecendo.
* Pastas organizadas, sujeito à mudanças.

-- --

## Made with ❤ by Kauã Diniz.
