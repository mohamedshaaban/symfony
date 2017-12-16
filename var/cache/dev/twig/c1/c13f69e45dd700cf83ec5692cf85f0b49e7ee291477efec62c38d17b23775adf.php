<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_cb6d85ebc18a079e1234b4dfce62f03229034a5de4565e47a6cc2d3953556c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65506da6d13e3101186f93b6a91b0c66b0e10be8b7ea63dec4cf95eeb6577bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b65506da6d13e3101186f93b6a91b0c66b0e10be8b7ea63dec4cf95eeb6577bd->enter($__internal_b65506da6d13e3101186f93b6a91b0c66b0e10be8b7ea63dec4cf95eeb6577bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_3b3532e292bfd51b55e55ceb7130d8ea664b274f6baa70d57eff2a58e97a9731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3532e292bfd51b55e55ceb7130d8ea664b274f6baa70d57eff2a58e97a9731->enter($__internal_3b3532e292bfd51b55e55ceb7130d8ea664b274f6baa70d57eff2a58e97a9731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b65506da6d13e3101186f93b6a91b0c66b0e10be8b7ea63dec4cf95eeb6577bd->leave($__internal_b65506da6d13e3101186f93b6a91b0c66b0e10be8b7ea63dec4cf95eeb6577bd_prof);

        
        $__internal_3b3532e292bfd51b55e55ceb7130d8ea664b274f6baa70d57eff2a58e97a9731->leave($__internal_3b3532e292bfd51b55e55ceb7130d8ea664b274f6baa70d57eff2a58e97a9731_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_66ed616f6f41f5eae38a074a6e773e72dac006549bd83612ab30defd0acdabdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ed616f6f41f5eae38a074a6e773e72dac006549bd83612ab30defd0acdabdb->enter($__internal_66ed616f6f41f5eae38a074a6e773e72dac006549bd83612ab30defd0acdabdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_259b619686fe2805f9fd9c04b5a8a649b68bd90e46cb7d684419552b0e99b6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259b619686fe2805f9fd9c04b5a8a649b68bd90e46cb7d684419552b0e99b6db->enter($__internal_259b619686fe2805f9fd9c04b5a8a649b68bd90e46cb7d684419552b0e99b6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_259b619686fe2805f9fd9c04b5a8a649b68bd90e46cb7d684419552b0e99b6db->leave($__internal_259b619686fe2805f9fd9c04b5a8a649b68bd90e46cb7d684419552b0e99b6db_prof);

        
        $__internal_66ed616f6f41f5eae38a074a6e773e72dac006549bd83612ab30defd0acdabdb->leave($__internal_66ed616f6f41f5eae38a074a6e773e72dac006549bd83612ab30defd0acdabdb_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_34f3ff8eb4cf7d6ec0a193ba449600132081caf1bcf3ddabcea8da3a36cc649d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f3ff8eb4cf7d6ec0a193ba449600132081caf1bcf3ddabcea8da3a36cc649d->enter($__internal_34f3ff8eb4cf7d6ec0a193ba449600132081caf1bcf3ddabcea8da3a36cc649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_46554fda5764c522772b0e2fbe241fb40686794a006de742dc5bfe0828af5906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46554fda5764c522772b0e2fbe241fb40686794a006de742dc5bfe0828af5906->enter($__internal_46554fda5764c522772b0e2fbe241fb40686794a006de742dc5bfe0828af5906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_46554fda5764c522772b0e2fbe241fb40686794a006de742dc5bfe0828af5906->leave($__internal_46554fda5764c522772b0e2fbe241fb40686794a006de742dc5bfe0828af5906_prof);

        
        $__internal_34f3ff8eb4cf7d6ec0a193ba449600132081caf1bcf3ddabcea8da3a36cc649d->leave($__internal_34f3ff8eb4cf7d6ec0a193ba449600132081caf1bcf3ddabcea8da3a36cc649d_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_5fb606592d3ebf932f9663205c21049d69e7b11f2031713f3daad9b82564feba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb606592d3ebf932f9663205c21049d69e7b11f2031713f3daad9b82564feba->enter($__internal_5fb606592d3ebf932f9663205c21049d69e7b11f2031713f3daad9b82564feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_4c28ec96908dbcc76be87e74a6a86f6e8b25e3f23737209a1ed749123131450e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c28ec96908dbcc76be87e74a6a86f6e8b25e3f23737209a1ed749123131450e->enter($__internal_4c28ec96908dbcc76be87e74a6a86f6e8b25e3f23737209a1ed749123131450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })()), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 23, $this->getSourceContext()); })()), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })()), "post", array());
        }
        
        $__internal_4c28ec96908dbcc76be87e74a6a86f6e8b25e3f23737209a1ed749123131450e->leave($__internal_4c28ec96908dbcc76be87e74a6a86f6e8b25e3f23737209a1ed749123131450e_prof);

        
        $__internal_5fb606592d3ebf932f9663205c21049d69e7b11f2031713f3daad9b82564feba->leave($__internal_5fb606592d3ebf932f9663205c21049d69e7b11f2031713f3daad9b82564feba_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_3534133fc4601249d2fb4a3212af02c65c6aa6f6b30ebd2bfc36ed05f63b77dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3534133fc4601249d2fb4a3212af02c65c6aa6f6b30ebd2bfc36ed05f63b77dc->enter($__internal_3534133fc4601249d2fb4a3212af02c65c6aa6f6b30ebd2bfc36ed05f63b77dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_3ea2c87bca11148ed8f25d76969b115c8138d0ff9de5ef59cacf0a24740ccd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea2c87bca11148ed8f25d76969b115c8138d0ff9de5ef59cacf0a24740ccd82->enter($__internal_3ea2c87bca11148ed8f25d76969b115c8138d0ff9de5ef59cacf0a24740ccd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_3ea2c87bca11148ed8f25d76969b115c8138d0ff9de5ef59cacf0a24740ccd82->leave($__internal_3ea2c87bca11148ed8f25d76969b115c8138d0ff9de5ef59cacf0a24740ccd82_prof);

        
        $__internal_3534133fc4601249d2fb4a3212af02c65c6aa6f6b30ebd2bfc36ed05f63b77dc->leave($__internal_3534133fc4601249d2fb4a3212af02c65c6aa6f6b30ebd2bfc36ed05f63b77dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
