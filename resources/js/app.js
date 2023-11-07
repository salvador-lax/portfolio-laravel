import './bootstrap';
import 'remixicon/fonts/remixicon.css';

const textareaList = document.querySelectorAll("textarea");

for (const textarea of textareaList) {
    textarea.style.height = `${textarea.scrollHeight}px`;
    textarea.style.overflowY = "hidden";

    textarea.addEventListener(
        "input",
        (e) => {
            const target = e.target;

            target.style.height = 0;
            target.style.height = `${target.scrollHeight}px`;
        },
        false
    );
}
