package com.example.cauamarizatividadeiipamii.datasource;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

import com.example.cauamarizatividadeiipamii.api.AppUtil;
import com.example.cauamarizatividadeiipamii.datamodel.ClienteDataModel;

public class AppDataBase extends SQLiteOpenHelper {

    public static final String NAME = "atividade_caua.sqlite";
    public static int version = 2;

    public AppDataBase(Context context) {
        super(context, NAME, null, version);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        Log.i(AppUtil.TAG, "Criando a tabela: " + ClienteDataModel.TABELA);
        db.execSQL(ClienteDataModel.criarTabela());
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS " + ClienteDataModel.TABELA);
        onCreate(db);
    }
}