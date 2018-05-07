package oop;

public class DecorateDemo {
    public static void main(String[] args) {
        Phone phone = new IphoneX(); // 得到一个可以进行通话的基础对象
        phone = new MusicPhone(phone); // 使用装饰器扩展基础对象，得到一个通话前可以播放彩铃的手机
        phone = new TimingPhone(phone); // 使用装饰器扩展基础对象，得到一个通话后可以显示通话时长的手机
        phone.call();
    }
}
