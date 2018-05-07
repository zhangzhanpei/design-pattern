package oop;

// 装饰器，实现接口并通过构造函数接受默认实现的对象
public abstract class PhoneDecorate implements Phone {
    private Phone phone;

    PhoneDecorate(Phone phone) {
        this.phone = phone;
    }

    @Override
    public void call() {
        this.phone.call();
    }
}
