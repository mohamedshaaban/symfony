<?php

/* SyliusAdminBundle:Product:_menu.html.twig */
class __TwigTemplate_69b47687d034897e195b0aa1293482e93b575ff3837fef7f68ecd57ae446865b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusAdminBundle:Product:_menu.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03e45b0175056c6393c01663e5bd20b6c695fb61d4846b8513690bd4cdf458f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e45b0175056c6393c01663e5bd20b6c695fb61d4846b8513690bd4cdf458f3->enter($__internal_03e45b0175056c6393c01663e5bd20b6c695fb61d4846b8513690bd4cdf458f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_menu.html.twig"));

        $__internal_30e23a076b672a165fad94caa6f65f1dd13af32bda08c8fd2617b70722c1aba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e23a076b672a165fad94caa6f65f1dd13af32bda08c8fd2617b70722c1aba6->enter($__internal_30e23a076b672a165fad94caa6f65f1dd13af32bda08c8fd2617b70722c1aba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_menu.html.twig"));

        // line 3
        if (twig_in_filter("create", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            // line 4
            $context["action"] = "create";
        } else {
            // line 6
            $context["action"] = "update";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e45b0175056c6393c01663e5bd20b6c695fb61d4846b8513690bd4cdf458f3->leave($__internal_03e45b0175056c6393c01663e5bd20b6c695fb61d4846b8513690bd4cdf458f3_prof);

        
        $__internal_30e23a076b672a165fad94caa6f65f1dd13af32bda08c8fd2617b70722c1aba6->leave($__internal_30e23a076b672a165fad94caa6f65f1dd13af32bda08c8fd2617b70722c1aba6_prof);

    }

    // line 9
    public function block_list($context, array $blocks = array())
    {
        $__internal_6be43d3cdcb61fd87346c60ed33db714ed9ff077544d9fa46903dc0b50a300ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be43d3cdcb61fd87346c60ed33db714ed9ff077544d9fa46903dc0b50a300ff->enter($__internal_6be43d3cdcb61fd87346c60ed33db714ed9ff077544d9fa46903dc0b50a300ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_6ae0e6053b2ed08198ce01ea43add78476bc4806af578add96e8778fbd5032b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae0e6053b2ed08198ce01ea43add78476bc4806af578add96e8778fbd5032b1->enter($__internal_6ae0e6053b2ed08198ce01ea43add78476bc4806af578add96e8778fbd5032b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 10
        $context["form"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 10, $this->getSourceContext()); })()), "form", array());
        // line 11
        echo "<div class=\"ui stackable grid sylius-tabular-form\">
    <div class=\"three wide column\">
        <div class=\"ui large fluid vertical menu\">
            ";
        // line 14
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
            // line 15
            echo "                ";
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
        // line 17
        echo "        </div>
    </div>
    <div class=\"thirteen wide column\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'errors');
        echo "
        <div class=\"ui segment\">
            ";
        // line 22
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
            // line 23
            echo "                ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "attribute", array(0 => "template"), "method"), "SyliusAdminBundle:Product:_menu.html.twig", 23)->display(array_merge($context, array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "product" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "product", array()))));
            // line 24
            echo "            ";
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
        // line 25
        echo "        </div>
    </div>
</div>
";
        
        $__internal_6ae0e6053b2ed08198ce01ea43add78476bc4806af578add96e8778fbd5032b1->leave($__internal_6ae0e6053b2ed08198ce01ea43add78476bc4806af578add96e8778fbd5032b1_prof);

        
        $__internal_6be43d3cdcb61fd87346c60ed33db714ed9ff077544d9fa46903dc0b50a300ff->leave($__internal_6be43d3cdcb61fd87346c60ed33db714ed9ff077544d9fa46903dc0b50a300ff_prof);

    }

    // line 30
    public function block_item($context, array $blocks = array())
    {
        $__internal_ff0a555b3d8431c0ba011babd9f52c415b1ff98946dc4a8dd7caaa5157a934b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0a555b3d8431c0ba011babd9f52c415b1ff98946dc4a8dd7caaa5157a934b8->enter($__internal_ff0a555b3d8431c0ba011babd9f52c415b1ff98946dc4a8dd7caaa5157a934b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_b60a038d55ec7d76662ecdf1dbbc8c1f3daa2972c253bf04f63e6a8f32c3b10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60a038d55ec7d76662ecdf1dbbc8c1f3daa2972c253bf04f63e6a8f32c3b10d->enter($__internal_b60a038d55ec7d76662ecdf1dbbc8c1f3daa2972c253bf04f63e6a8f32c3b10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 31
        $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->getSourceContext()); })()), "attributes", array());
        // line 32
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
        // line 33
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
            // line 34
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 34, $this->getSourceContext()); })()), array(0 => "active"));
        }
        // line 36
        if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 36, $this->getSourceContext()); })()))) {
            // line 37
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 37, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 37, $this->getSourceContext()); })()), " ")));
        }
        // line 39
        echo "    <a class=\"item";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attributes"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 39, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        echo "\" data-tab=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "</a>
";
        
        $__internal_b60a038d55ec7d76662ecdf1dbbc8c1f3daa2972c253bf04f63e6a8f32c3b10d->leave($__internal_b60a038d55ec7d76662ecdf1dbbc8c1f3daa2972c253bf04f63e6a8f32c3b10d_prof);

        
        $__internal_ff0a555b3d8431c0ba011babd9f52c415b1ff98946dc4a8dd7caaa5157a934b8->leave($__internal_ff0a555b3d8431c0ba011babd9f52c415b1ff98946dc4a8dd7caaa5157a934b8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 39,  177 => 37,  175 => 36,  172 => 34,  170 => 33,  168 => 32,  166 => 31,  157 => 30,  144 => 25,  130 => 24,  127 => 23,  110 => 22,  105 => 20,  100 => 17,  83 => 15,  66 => 14,  61 => 11,  59 => 10,  50 => 9,  40 => 1,  37 => 6,  34 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% if 'create' in app.request.attributes.get('_route') %}
    {% set action = 'create' %}
{% else %}
    {% set action = 'update' %}
{% endif %}

{% block list %}
{% set form = (options.form) %}
<div class=\"ui stackable grid sylius-tabular-form\">
    <div class=\"three wide column\">
        <div class=\"ui large fluid vertical menu\">
            {% for item in item.children %}
                {{ block('item') }}
            {% endfor %}
        </div>
    </div>
    <div class=\"thirteen wide column\">
        {{ form_errors(form) }}
        <div class=\"ui segment\">
            {% for item in item.children %}
                {% include item.attribute('template') with {'form': form, 'product': options.product} %}
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}

{% block item %}
    {%- set attributes = item.attributes %}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge(['active']) %}
    {%- endif %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    <a class=\"item{% if attributes.class is defined %} {{ attributes.class }}{% endif %}\" data-tab=\"{{ item.name }}\">{{ item.label|trans }}</a>
{% endblock %}
", "SyliusAdminBundle:Product:_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/_menu.html.twig");
    }
}
