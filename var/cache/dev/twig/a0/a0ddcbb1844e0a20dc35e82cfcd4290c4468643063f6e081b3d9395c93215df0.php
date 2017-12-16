<?php

/* @SyliusShop/ProductReview/_single.html.twig */
class __TwigTemplate_7cea6d407f22d2656531de82aa740fa6ab4a8415bdec38e86c03a9973da7d0cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7d909daf7109bd218e4a488ebe1611ec38002754240bb11ca95aed0f6b958ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d909daf7109bd218e4a488ebe1611ec38002754240bb11ca95aed0f6b958ef->enter($__internal_c7d909daf7109bd218e4a488ebe1611ec38002754240bb11ca95aed0f6b958ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_single.html.twig"));

        $__internal_785dd94adc42f31d715f46222651257349e95e1f9ea5e5408bb3cf27749cfd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785dd94adc42f31d715f46222651257349e95e1f9ea5e5408bb3cf27749cfd64->enter($__internal_785dd94adc42f31d715f46222651257349e95e1f9ea5e5408bb3cf27749cfd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_single.html.twig"));

        // line 1
        echo "<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 3, $this->getSourceContext()); })()), "author", array()), "firstName", array()), "html", null, true);
        echo "</a>
        <div class=\"metadata\">
            <div class=\"date\">";
        // line 5
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 5, $this->getSourceContext()); })()), "createdAt", array()));
        echo "</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 7, $this->getSourceContext()); })()), "rating", array()), "html", null, true);
        echo "\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 10, $this->getSourceContext()); })()), "comment", array()), "html", null, true);
        echo "</div>
    </div>
</div>
";
        
        $__internal_c7d909daf7109bd218e4a488ebe1611ec38002754240bb11ca95aed0f6b958ef->leave($__internal_c7d909daf7109bd218e4a488ebe1611ec38002754240bb11ca95aed0f6b958ef_prof);

        
        $__internal_785dd94adc42f31d715f46222651257349e95e1f9ea5e5408bb3cf27749cfd64->leave($__internal_785dd94adc42f31d715f46222651257349e95e1f9ea5e5408bb3cf27749cfd64_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/ProductReview/_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  39 => 7,  34 => 5,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">{{ review.author.firstName }}</a>
        <div class=\"metadata\">
            <div class=\"date\">{{ review.createdAt|format_date }}</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"{{ review.rating }}\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">{{ review.comment }}</div>
    </div>
</div>
", "@SyliusShop/ProductReview/_single.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\ProductReview\\_single.html.twig");
    }
}
