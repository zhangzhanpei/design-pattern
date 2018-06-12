/**
 * 抽象工厂，生成配套的产品
 * 饮料 + 主食
 */
abstract public class Meal {
    abstract public Drink getDrink();
    abstract public Food getFood();
}
