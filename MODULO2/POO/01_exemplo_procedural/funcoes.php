<?php

require_once __DIR__ . '/utilitarios.php';

//Passagem por referência

function setCor(&$cor, string $corArgument): void {
    $cor = $corArgument;
}

function setPortas(&$portas, int $portasArgument): void {
    $portas = $portasArgument;
}

function setTransmissaoManual(&$transmissaoManual, bool $value): void {
    $transmissaoManual = $value;
}

function acelerar(&$velocidade): void {
    $velocidade += 5;
}

function frear(&$velocidade): void {
    $velocidade = 0;
}

function ligarFarois(&$faroisLigados): void {
    $faroisLigados = true;
}