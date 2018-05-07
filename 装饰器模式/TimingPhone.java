package oop;

// 继承装饰器进行扩展
public class TimingPhone extends PhoneDecorate {
    public TimingPhone(Phone phone) {
        super(phone);
    }

    // 需要扩展的功能，使得手机在通话后可以显示通话时长
    private void timing() {
        System.out.println("显示通话时长...");
    }

    @Override
    public void call() {
        super.call();
        this.timing();
    }
}
