/**
 * 具体工厂，生产早餐
 * 牛奶 + 面包
 */
public class BreakfastFactory extends Meal {
    @Override
    public Drink getDrink() {
        return new Milk();
    }

    @Override
    public Food getFood() {
        return new Bread();
    }
}
