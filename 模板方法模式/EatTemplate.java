/**
 * 模板方法，定义一个操作中的算法的骨架，将一些步骤延迟到子类中。模板方法使得子类可以不改变一个算法的结构即可重定义该算法的某些特定步骤。
 * 例如吃早餐和吃午饭，都需要经历 取餐具、取食物、付款 三个步骤，其中 取餐具 和 付款 两个步骤是一样的，可已抽象到模板方法中，我们只需分别定义所取的食物即可(延迟到子类中定义)
 */
public abstract class EatTemplate {
    // 取餐具
    public void takeTableware() {
        System.out.println("取餐具");
    }

    // 取食物
    abstract void takeFood();

    // 付款
    public void pay() {
        System.out.println("付款");
    }

    // 算法骨架(吃饭的三个步骤)
    final public void eat() {
        takeTableware();
        takeFood();
        pay();
    }
}
