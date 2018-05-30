/**
 * 产品相应的工厂
 */
public class MilkFactory implements Factory {
    public Drink getDrink() {
        return new Milk();
    }
}
