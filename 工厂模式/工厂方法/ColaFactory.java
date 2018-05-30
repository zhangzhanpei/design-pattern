/**
 * 产品相应的工厂
 */
public class ColaFactory implements Factory {
    public Drink getDrink() {
        return new Cola();
    }
}
