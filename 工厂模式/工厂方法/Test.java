/**
 * 工厂方法模式
 * 不再提供一个统一的工厂类来创建所有的对象，而是针对不同的对象提供不同的工厂，即每个具体产品都有一个与之对应的工厂
 * 客户端无需知道具体的产品类，只需要知道对应的工厂即可
 */
public class Test {
    public static void main(String[] args) {
        Factory factory = new ColaFactory();
        factory.getDrink();
    }
}
