/**
 * 抽象工厂，从多类产品中各生产一份组成一个完整产品
 */
public class Test {
    public static void main(String[] args) {
        // 通过具体的工厂生成一整套相关联的多个产品
        Meal meal = new LunchFactory();
        Drink drink = meal.getDrink();
        Food food = meal.getFood();
    }
}
