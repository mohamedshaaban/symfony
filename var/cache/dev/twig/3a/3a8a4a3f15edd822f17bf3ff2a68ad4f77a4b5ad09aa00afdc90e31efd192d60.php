<?php

/* SyliusShopBundle:ProductReview:_single.html.twig */
class __TwigTemplate_93f533d26c8ab9a5e04d368ee73cafb10a4f43a47da1aad73ad4c30ad9789f81 extends Twig_Template
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
        $__internal_4e893a60fa656e9a4b88faa976f2ff191a4c4ddc36fed6e865b1b8d7cd5272b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e893a60fa656e9a4b88faa976f2ff191a4c4ddc36fed6e865b1b8d7cd5272b1->enter($__internal_4e893a60fa656e9a4b88faa976f2ff191a4c4ddc36fed6e865b1b8d7cd5272b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_single.html.twig"));

        $__internal_2c4410d9d2faa940c064c9580ede82948dbd56148c05f6b408f763fe53c1d66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4410d9d2faa940c064c9580ede82948dbd56148c05f6b408f763fe53c1d66b->enter($__internal_2c4410d9d2faa940c064c9580ede82948dbd56148c05f6b408f763fe53c1d66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_single.html.twig"));

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
        
        $__internal_4e893a60fa656e9a4b88faa976f2ff191a4c4ddc36fed6e865b1b8d7cd5272b1->leave($__internal_4e893a60fa656e9a4b88faa976f2ff191a4c4ddc36fed6e865b1b8d7cd5272b1_prof);

        
        $__internal_2c4410d9d2faa940c064c9580ede82948dbd56148c05f6b408f763fe53c1d66b->leave($__internal_2c4410d9d2faa940c064c9580ede82948dbd56148c05f6b408f763fe53c1d66b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_single.html.twig";
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
", "SyliusShopBundle:ProductReview:_single.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/ProductReview/_single.html.twig");
    }
}
