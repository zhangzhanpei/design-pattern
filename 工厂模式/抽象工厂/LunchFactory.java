/**
 * 具体工厂，生产午餐
 * 可乐 + 米饭
 */
public class LunchFactory extends Meal {
    @Override
    public Drink getDrink() {
        return new Cola();
    }

    @Override
    public Food getFood() {
        return new Rice();
    }
}
