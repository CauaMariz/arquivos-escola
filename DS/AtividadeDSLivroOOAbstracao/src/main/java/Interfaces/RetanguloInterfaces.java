package Interfaces;

class RetanguloInterfaces implements FormaInterfaces{
    private double largura;
    private double altura;

    public RetanguloInterfaces(double largura, double altura){
        this.altura = altura;
        this.largura = largura;
    }

    @Override
    public double calcularArea(){return largura * altura;}
}
