const handleArticles = (
  articles: NodeListOf<HTMLDivElement>,
  buttons: NodeListOf<HTMLButtonElement>,
  button: HTMLButtonElement
) => {
  elementClassList(buttons);
  elementClassList(articles);

  button.classList.add("active");
  articles.forEach((article) => {
    if (article.classList.contains(button.id)) {
      article.classList.add("active");
    }
  });
};

const elementClassList = (
  elements: NodeListOf<HTMLDivElement> | NodeListOf<HTMLButtonElement>
) => {
  elements.forEach((element) => {
    element.classList.remove("active");
  });
};

export default handleArticles;
