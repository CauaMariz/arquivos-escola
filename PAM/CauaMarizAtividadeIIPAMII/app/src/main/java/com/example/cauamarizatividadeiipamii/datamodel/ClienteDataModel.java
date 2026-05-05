package com.example.cauamarizatividadeiipamii.datamodel;

public class ClienteDataModel{
    public static final String TABELA = "cliente";
    public static final String ID = "id";
    public static final String NOME = "nome";
    public static final String EMAIL = "email";

    public static final String ENDERECO = "endereco";

    public static final String CIDADE = "cidade";

    public static final String TELEFONE = "telefone";

    public static final String CEP = "cep";
    public static String queryCriarTabela = "";

    public static String criarTabela(){

        queryCriarTabela += "CREATE TABLE IF NOT EXISTS " + TABELA + " (";
        queryCriarTabela += ID + " INTEGER PRIMARY KEY AUTOINCREMENT, ";
        queryCriarTabela += NOME + " TEXT, ";
        queryCriarTabela += EMAIL + " TEXT, ";
        queryCriarTabela += ENDERECO + " TEXT, ";
        queryCriarTabela += CIDADE + " TEXT, ";
        queryCriarTabela += TELEFONE + " TEXT, ";
        queryCriarTabela += CEP + " TEXT";
        queryCriarTabela += ")";

        return queryCriarTabela;
    };

}