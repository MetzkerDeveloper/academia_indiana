<?php

require_once __DIR__ . '/funcoes.php';

//Problema: Variáveis globais
$cor = null;
$portas = null;
$modelo = null;
$velocidade = null;
$faroisLigados = false;
$transmissaoManual = null;

mostrarMensagem([
    "Valor da variável cor ANTES da função: $cor",
    "Valor da variável portas ANTES da função: $portas",
    "Valor da variável velocidade ANTES da função: $velocidade",
    "Valor da variável faroisLigados ANTES da função: $faroisLigados",
    "Valor da variável transmissaoManual ANTES da função: $transmissaoManual"
]);

setCor($cor, 'Branco');
setPortas($portas, 4);
setTransmissaoManual($transmissaoManual, true);

//Aceleração
acelerar($velocidade);
acelerar($velocidade);
acelerar($velocidade);

ligarFarois($faroisLigados);

mostrarMensagem([
    "Valor da variável cor DEPOIS da função: $cor",
    "Valor da variável portas DEPOIS da função: $portas",
    "Valor da variável velocidade DEPOIS da função: $velocidade",
    "Valor da variável faroisLigados DEPOIS da função: $faroisLigados",
    "Valor da variável transmissaoManual DEPOIS da função: $transmissaoManual"
]);


//Problema: Nada me impede de fazer isto:
$cor = false;
$portas = 'Matheus';
$velocidade = -5;
$faroisLigados = 'Branco';
$transmissaoManual = 10;


mostrarMensagem([
    "Valor da variável cor DEPOIS da modificação: $cor",
    "Valor da variável portas DEPOIS da modificação: $portas",
    "Valor da variável velocidade DEPOIS da modificação: $velocidade",
    "Valor da variável faroisLigados DEPOIS da modificação: $faroisLigados",
    "Valor da variável transmissaoManual DEPOIS da modificação: $transmissaoManual"
]);