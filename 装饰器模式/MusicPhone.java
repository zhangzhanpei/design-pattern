package oop;

// 继承装饰器进行扩展
public class MusicPhone extends PhoneDecorate {
    public MusicPhone(Phone phone) {
        super(phone);
    }

    // 需要扩展的功能，使得手机在通话前可以播放彩铃
    private void listenMusic() {
        System.out.println("播放彩铃中...");
    }

    @Override
    public void call() {
        this.listenMusic();
        super.call();
    }
}
