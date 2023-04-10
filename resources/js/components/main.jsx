import './Example'

if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
