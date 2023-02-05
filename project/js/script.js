// 要素の取得
const modalOpen = document.getElementById('openModal');
const modalArea = document.getElementById('modalArea');

// [sign Up]のボタンをクリックした後の処理
// モーダルエリアの表示
modalOpen.addEventListener('click', () => {
    modalArea.style.display = 'block';
});

// モーダルエリアを閉じる
const modalClose1 = document.getElementById('closeModal');
modalClose1.addEventListener('click',() => {
    modalArea.style.display = 'none';
});

const modalClose2 = document.getElementById('modalBg');
modalClose2.addEventListener('click',() => {
    modalArea.style.display = 'none';
});



// 要素の取得
const modalOpen2 = document.getElementById('openModal2');
const modalArea2 = document.getElementById('modalArea2');

// [sign Up]のボタンをクリックした後の処理
// モーダルエリアの表示
modalOpen2.addEventListener('click', () => {
    modalArea2.style.display = 'block';
});

// モーダルエリアを閉じる
const modalClose3 = document.getElementById('closeModal2');
modalClose3.addEventListener('click',() => {
    modalArea2.style.display = 'none';
});

const modalClose4 = document.getElementById('modalBg2');
modalClose4.addEventListener('click',() => {
    modalArea2.style.display = 'none';
});