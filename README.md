# Controle-Selecao-Candidatos

Essa aplicação se trata de um desafio de programação referente a uma vaga de Programador Júnior, onde deve ser desenvolvida uma Aplicação para controle do de seleção de candidatos para vagas de emprego.

--- 

## Desafio – Programador Júnior PHP/Laravel

O desafio consiste na implementação de uma aplicação PHP utilizando o framework Laravel. O objetivo da aplicação é controlar o processo de seleção de candidatos a vagas de emprego e deve conter dois CRUD’s: um para o cadastro de candidatos e outro para o cadastro de vagas. Além dos CRUD's deverá haver uma página onde será possível visualizar as vagas disponíveis e os candidatos que atendem aos requisitos da vaga.

- 1. **CRUD Vagas:** Deve conter o título da vaga e as habilidades técnicas necessárias para ocupar a vaga. Cada vaga deve possuir pelo menos 3 (três) habilidades técnicas.
Exemplo:

Vaga: Desenvolvedor Backend PHP Júnior
Habilidades técnicas:  
- PHP
- Laravel
- PostgreSQL
- HTML
- CSS
- JavaScript  


2. **CRUD Candidato:** Deverá conter o nome do candidato e suas habilidades técnicas.

Exemplo: 
Linus Torvalds
Habilidades técnicas:  
- C
- C++
- C#
- Python
- PHP
- PostgreSQL
- HTML
- CSS
- JavaScript  

3. **Página das vagas disponíveis:**
   3.1 - A página deverá exibir a relação de vagas cadastradas e, para cada vaga, quais candidatos atendem aos requisitos da vaga;
   3.2 - Um candidato atende a uma vaga se ele possui pelo menos 3 (três) habilidades exigidas para a vaga;

O desafio será considerado aceito caso atenda aos 3(três) requisitos acima.

## Será considerado diferencia a implementação dos seguintes itens:

1. Criar autenticação de usuários usando os recursos do Laravel (https://laravel.com/docs/8.x/authentication)

2. Inserir projeto num container docker

