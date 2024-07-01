document.addEventListener('DOMContentLoaded', function() {
    // ナビゲーションのリンクにクリックイベントを設定
    const navLinks = document.querySelectorAll('nav ul li a');
    
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // デフォルトの動作をキャンセル

            const targetId = this.getAttribute('href').substring(1); // クリックされたリンクのhref属性からIDを取得
            const targetElement = document.getElementById(targetId); // IDをもとに対象の要素を取得

            // 対象の要素が存在する場合、スクロールする
            if (targetElement) {
                const offsetTop = targetElement.offsetTop; // 対象要素のページ上部からの位置
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth' // スムーズスクロール
                });
            }
        });
    });
});
