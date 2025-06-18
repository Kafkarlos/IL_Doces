const btnGenerate = document.querySelector('#generate-pdf');

btnGenerate.addEventListener("click",()=>{
    const content = document.querySelector("#content");

    const options = {
        margin: [10,10,10,10],
        filename: 'relatorio.pdf',
        html2canvas: {scale: 1},
        jsPDF: {unit: 'mm', format:'a4', orientation: 'landscape'},
    }
    html2pdf().set(options).from(content).toPdf().save();
});