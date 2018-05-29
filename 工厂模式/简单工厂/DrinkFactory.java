/**
 * 简单工厂，传入产品名字，工厂生产产品
 * 新增产品时需要修改工厂，不符合开闭原则
 */
public class DrinkFactory {
    public Drink getDrink(String drinkName) {
        switch (drinkName) {
            case "milk":
                return new Milk();
            case "cola":
                return new Cola();
        }
        return null;
    }
}
