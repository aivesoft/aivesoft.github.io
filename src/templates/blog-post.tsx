import * as React from "react";
import {graphql} from "gatsby";
import Layout from "@/src/components/layout/layout";
import Seo from "@/src/components/seo";
import "prismjs/themes/prism-okaidia.min.css";
import {cn} from "@nextui-org/react";



const BlogPostTemplate = ({data: {previous, next, site, markdownRemark: post}, location}) => {
  const siteTitle = site.siteMetadata?.title || `Title`;

  return (
      <Layout location={location} title={siteTitle}>
        <article
            itemScope
            itemType="https://schema.org/Article"
        >
          <header className="py-8">
            <h1 className="text-3xl font-medium">
              {post.frontmatter.title}
            </h1>
            <p className="mt-2 text-default-400">{post.frontmatter.category} | {post.frontmatter.date}</p>
          </header>
          <div>
            <section
                className={'article-content'}
                dangerouslySetInnerHTML={{__html: post.html}}
                itemProp="articleBody"
            />
          </div>
        </article>
      </Layout>
  );
};

export const Head = ({data: {markdownRemark: post}}) => {
  return (
      <Seo
          title={post.frontmatter.title}
          description={post.frontmatter.description || post.excerpt} children={undefined} lang={undefined}/>
  );
};

export default BlogPostTemplate;

export const pageQuery = graphql`
    query BlogPostBySlug(
        $id: String!
        $previousPostId: String
        $nextPostId: String
    ) {
        site {
            siteMetadata {
                title
            }
        }
        markdownRemark(id: { eq: $id }) {
            id
            excerpt(pruneLength: 160)
            html
            frontmatter {
                title
                date(formatString: "YYYY년 MM월 DD일")
                description
                category
            }
        }
        previous: markdownRemark(id: { eq: $previousPostId }) {
            fields {
                slug
            }
            frontmatter {
                title
            }
        }
        next: markdownRemark(id: { eq: $nextPostId }) {
            fields {
                slug
            }
            frontmatter {
                title
            }
        }
    }
`;
