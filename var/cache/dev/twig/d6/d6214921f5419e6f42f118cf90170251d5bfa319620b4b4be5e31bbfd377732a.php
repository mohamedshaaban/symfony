<?php

/* SyliusUiBundle:Menu:simple.html.twig */
class __TwigTemplate_8a886781dc1c21a80309f44ab29def170a7fd966671fe1cad6f2e86b91c43617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:simple.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c7bc5a0ed44f36fb8340da402a0ebb07427fab16f78ddf59f819f4925b4b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c7bc5a0ed44f36fb8340da402a0ebb07427fab16f78ddf59f819f4925b4b87->enter($__internal_39c7bc5a0ed44f36fb8340da402a0ebb07427fab16f78ddf59f819f4925b4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:simple.html.twig"));

        $__internal_3b826c04036b7167bdab7da243a68c471fd48613b0ac09cacd04a79c2a4ade6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b826c04036b7167bdab7da243a68c471fd48613b0ac09cacd04a79c2a4ade6d->enter($__internal_3b826c04036b7167bdab7da243a68c471fd48613b0ac09cacd04a79c2a4ade6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:simple.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c7bc5a0ed44f36fb8340da402a0ebb07427fab16f78ddf59f819f4925b4b87->leave($__internal_39c7bc5a0ed44f36fb8340da402a0ebb07427fab16f78ddf59f819f4925b4b87_prof);

        
        $__internal_3b826c04036b7167bdab7da243a68c471fd48613b0ac09cacd04a79c2a4ade6d->leave($__internal_3b826c04036b7167bdab7da243a68c471fd48613b0ac09cacd04a79c2a4ade6d_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_6552b4c0532f21d04f2dc116e808da6e7818aaeee45871008d0e80074c6003a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6552b4c0532f21d04f2dc116e808da6e7818aaeee45871008d0e80074c6003a0->enter($__internal_6552b4c0532f21d04f2dc116e808da6e7818aaeee45871008d0e80074c6003a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_85aab54e692ddbfec7fc1d2e845f634f89959ed8839ec5b8bf4a9088fdcf199b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85aab54e692ddbfec7fc1d2e845f634f89959ed8839ec5b8bf4a9088fdcf199b->enter($__internal_85aab54e692ddbfec7fc1d2e845f634f89959ed8839ec5b8bf4a9088fdcf199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    <div class=\"ui fluid vertical menu\">
        <div class=\"header item\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "</div>
        ";
        // line 6
        $this->displayBlock("list", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_85aab54e692ddbfec7fc1d2e845f634f89959ed8839ec5b8bf4a9088fdcf199b->leave($__internal_85aab54e692ddbfec7fc1d2e845f634f89959ed8839ec5b8bf4a9088fdcf199b_prof);

        
        $__internal_6552b4c0532f21d04f2dc116e808da6e7818aaeee45871008d0e80074c6003a0->leave($__internal_6552b4c0532f21d04f2dc116e808da6e7818aaeee45871008d0e80074c6003a0_prof);

    }

    // line 10
    public function block_list($context, array $blocks = array())
    {
        $__internal_c3acfe39fa5ee7945f75b016a8bd9bd7d4747c3bee85dba11a6846e4e3668303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3acfe39fa5ee7945f75b016a8bd9bd7d4747c3bee85dba11a6846e4e3668303->enter($__internal_c3acfe39fa5ee7945f75b016a8bd9bd7d4747c3bee85dba11a6846e4e3668303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_6e56508f2c05f8d7c92505aa199ad93773a47f81b962a882f2975a856929436b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e56508f2c05f8d7c92505aa199ad93773a47f81b962a882f2975a856929436b->enter($__internal_6e56508f2c05f8d7c92505aa199ad93773a47f81b962a882f2975a856929436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6e56508f2c05f8d7c92505aa199ad93773a47f81b962a882f2975a856929436b->leave($__internal_6e56508f2c05f8d7c92505aa199ad93773a47f81b962a882f2975a856929436b_prof);

        
        $__internal_c3acfe39fa5ee7945f75b016a8bd9bd7d4747c3bee85dba11a6846e4e3668303->leave($__internal_c3acfe39fa5ee7945f75b016a8bd9bd7d4747c3bee85dba11a6846e4e3668303_prof);

    }

    // line 16
    public function block_item($context, array $blocks = array())
    {
        $__internal_d7486d9c49d5b07b7043b2cf074a472153196f37c2adab67a0c3d9e3c0de3378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7486d9c49d5b07b7043b2cf074a472153196f37c2adab67a0c3d9e3c0de3378->enter($__internal_d7486d9c49d5b07b7043b2cf074a472153196f37c2adab67a0c3d9e3c0de3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_6cf4de55061a7f04d387420170994432193282257046e8b021dcc9cc7dd75429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf4de55061a7f04d387420170994432193282257046e8b021dcc9cc7dd75429->enter($__internal_6cf4de55061a7f04d387420170994432193282257046e8b021dcc9cc7dd75429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 17
        echo "    <a class=\"item\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 17, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\">
        ";
        // line 18
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "
    </a>
";
        
        $__internal_6cf4de55061a7f04d387420170994432193282257046e8b021dcc9cc7dd75429->leave($__internal_6cf4de55061a7f04d387420170994432193282257046e8b021dcc9cc7dd75429_prof);

        
        $__internal_d7486d9c49d5b07b7043b2cf074a472153196f37c2adab67a0c3d9e3c0de3378->leave($__internal_d7486d9c49d5b07b7043b2cf074a472153196f37c2adab67a0c3d9e3c0de3378_prof);

    }

    // line 23
    public function block_icon($context, array $blocks = array())
    {
        $__internal_350244e89732a9738b6c1d6700291fe61405352cbf7cdef83b116e8abb174464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350244e89732a9738b6c1d6700291fe61405352cbf7cdef83b116e8abb174464->enter($__internal_350244e89732a9738b6c1d6700291fe61405352cbf7cdef83b116e8abb174464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_adddb1be7c58c7549d66ffdce16a447519b77cce498261e6beb5fcf771e9da4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adddb1be7c58c7549d66ffdce16a447519b77cce498261e6beb5fcf771e9da4d->enter($__internal_adddb1be7c58c7549d66ffdce16a447519b77cce498261e6beb5fcf771e9da4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 24
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->getSourceContext()); })()), "labelAttribute", array(0 => "icon"), "method");
        // line 25
        echo "    ";
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 25, $this->getSourceContext()); })())) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_adddb1be7c58c7549d66ffdce16a447519b77cce498261e6beb5fcf771e9da4d->leave($__internal_adddb1be7c58c7549d66ffdce16a447519b77cce498261e6beb5fcf771e9da4d_prof);

        
        $__internal_350244e89732a9738b6c1d6700291fe61405352cbf7cdef83b116e8abb174464->leave($__internal_350244e89732a9738b6c1d6700291fe61405352cbf7cdef83b116e8abb174464_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 25,  164 => 24,  155 => 23,  142 => 19,  138 => 18,  133 => 17,  124 => 16,  99 => 12,  81 => 11,  72 => 10,  59 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    <div class=\"ui fluid vertical menu\">
        <div class=\"header item\">{{ item.label|trans }}</div>
        {{ block('list') }}
    </div>
{% endblock %}

{% block list %}
    {% for item in item.children %}
        {{ block('item') }}
    {% endfor %}
{% endblock %}

{% block item %}
    <a class=\"item\" href=\"{{ item.uri }}\">
        {{ block('icon') }}
        {{ item.label|trans }}
    </a>
{% endblock %}

{% block icon %}
    {% set icon = item.labelAttribute('icon') %}
    {% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}
", "SyliusUiBundle:Menu:simple.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/simple.html.twig");
    }
}
