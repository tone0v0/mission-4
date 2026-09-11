<?php
class SanctuaryGateway {
    // ==========================================
    // 【指示】下の1行を自分のプロパティ定義を追加せよ！
    // 担当A: public bool $sunStone = true;
    // 担当B: public bool $moonStone = true;
    public string $placeholderStone = "NONE"; // ←これは残す
    // ==========================================

    public function unlock(): void {
        echo "=== 日輪の門 封印の間 ===\n";
        usleep(500000);

        $sun = $this->sunStone ?? false;
        $moon = $this->moonStone ?? false;

        if ($sun === true && $moon === true) {
            echo "✨ 【封印解除】太陽と月の魔力が交わり、古代の石扉が開かれた！\n";
        } else {
            echo "💀 【拒絶】石が足りません。(Sun:" . ($sun ? "○" : "×") . ", Moon:" . ($moon ? "○" : "×") . ")\n";
            exit(1);
        }
    }
}
(new SanctuaryGateway())->unlock();
