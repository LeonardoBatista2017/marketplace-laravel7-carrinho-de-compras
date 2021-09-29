<?php
function formatValorToDatabase($valor)
{
    return str_replace(['R$','.',','],['','','.'],$valor);
}